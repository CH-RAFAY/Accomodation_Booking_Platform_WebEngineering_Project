import os
import re

def read_file(path):
    if not os.path.exists(path):
        return ""
    with open(path, 'r', encoding='utf-8', errors='ignore') as f:
        return f.read()

def write_file(path, content):
    with open(path, 'w', encoding='utf-8') as f:
        f.write(content)

def extract_style(content):
    match = re.search(r'<style>(.*?)</style>', content, re.DOTALL)
    if match:
        return match.group(1)
    return ""

def extract_body_content(content):
    # Try to find content inside body tags
    match = re.search(r'<body[^>]*>(.*?)</body>', content, re.DOTALL)
    if match:
        return match.group(1)
    # If no body tags, return whole content (fallback)
    return content

import shutil

def main():
    # Create public directory
    output_dir = 'public'
    if not os.path.exists(output_dir):
        os.makedirs(output_dir)
    
    # Copy CSS
    if os.path.exists('css'):
        if os.path.exists(os.path.join(output_dir, 'css')):
            shutil.rmtree(os.path.join(output_dir, 'css'))
        shutil.copytree('css', os.path.join(output_dir, 'css'))
        print("Copied css directory")

    # Read Includes
    header_php = read_file('inc/header.php')
    footer_php = read_file('inc/footer.php')
    link_php = read_file('inc/link.php')

    # Extract useful parts from header.php
    # header.php seems to have a full HTML structure, but we only want the CSS and the Navbar/Modals
    header_css = extract_style(header_php)
    
    # We want the Navbar and Modals. They are inside the <body> tag in header.php
    # We need to be careful not to include the <script> tags if they cause conflicts, but let's keep them for now.
    header_body_content = extract_body_content(header_php)
    
    # Clean up header_body_content: remove PHP tags
    
    # Remove the modal error handling script which relies on PHP and causes syntax errors when PHP tags are stripped
    header_body_content = re.sub(r'// Keep modals open on form submission errors.*?<\?php endif; \?>', '', header_body_content, flags=re.DOTALL)

    # Handle Login/Logout logic: Default to Logged Out view
    # Remove the "Logged In" part and keep the "Logged Out" part (Login/Register buttons)
    # Pattern matches: <?php if ($is_logged_in): ?> ... <?php else: ?> (captured content) <?php endif; ?>
    login_pattern = r'<\?php if \(\$is_logged_in\): \?>.*?<\?php else: \?>(.*?)<\?php endif; \?>'
    header_body_content = re.sub(login_pattern, r'\1', header_body_content, flags=re.DOTALL)

    header_body_content = re.sub(r'<\?php.*?\?>', '', header_body_content, flags=re.DOTALL)
    
    # Fix broken links in header (e.g. "?logout=true" or "dashboard.php")
    header_body_content = header_body_content.replace('dashboard.php', 'dashboard.html')
    header_body_content = header_body_content.replace('?logout=true', '#')
    
    # Clean up footer: remove PHP tags
    footer_content = re.sub(r'<\?php.*?\?>', '', footer_php, flags=re.DOTALL)
    
    # Files to convert
    files = ['index.php', 'Rooms.php', 'Facilities.php', 'contactUs.php', 'about.php', 'Ocassion.php', 'dashboard.php']
    
    for filename in files:
        if not os.path.exists(filename):
            continue
            
        content = read_file(filename)
        
        # 1. Replace inc/link.php
        content = content.replace("<?php require('inc/link.php');?>", link_php)
        content = content.replace("<?php require('inc/link.php'); ?>", link_php)
        
        # 2. Inject Header CSS
        # Find </head> and insert style before it
        if header_css:
            content = content.replace('</head>', f'<style>{header_css}</style>\n</head>')
            
        # 3. Replace inc/header.php
        # Note: In index.php it is "inc\header.php" (backslash) or "inc/header.php"
        content = content.replace("<?php require('inc/header.php');?>", header_body_content)
        content = content.replace("<?php require('inc\header.php');?>", header_body_content)
        
        # 4. Replace inc/footer.php
        content = content.replace("<?php require('inc/footer.php');?>", footer_content)
        
        # 5. Remove all remaining PHP tags
        content = re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)
        
        # 6. Replace .php links with .html
        content = re.sub(r'href="([^"]+)\.php"', r'href="\1.html"', content)
        
        # 7. Save as .html
        new_filename = filename.replace('.php', '.html')
        output_path = os.path.join(output_dir, new_filename)
        
        # Ensure subdirectory exists (for admin/index.html)
        os.makedirs(os.path.dirname(output_path), exist_ok=True)
        
        write_file(output_path, content)
        print(f"Generated {output_path}")

    # Generate Admin Index
    if os.path.exists('admin/index.php'):
        admin_content = read_file('admin/index.php')
        admin_link = read_file('admin/inc/link.php')
        # Replace requires
        admin_content = admin_content.replace("<?php require('inc/link.php'); ?>", admin_link)
        admin_content = re.sub(r'<\?php.*?\?>', '', admin_content, flags=re.DOTALL)
        
        output_path = os.path.join(output_dir, 'admin/index.html')
        os.makedirs(os.path.dirname(output_path), exist_ok=True)
        write_file(output_path, admin_content)
        print(f"Generated {output_path}")

if __name__ == "__main__":
    main()
