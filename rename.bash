#!/bin/bash

# Define current directory
current_directory=$(pwd)

# Get the name of the current directory (basename)
current_directory_name=$(basename "$current_directory")

# Define the path to the file
file_paths=("docker-compose.yml" "package-lock.json" "package.json" "auth/db.php")

# Define replaceable word
search_word="dockerstart"

# Loop through each file and replace the word
for file_path in "${file_paths[@]}"; do
    # Check if the file exists
    if [ -e "$file_path" ]; then
        # Use sed to replace the word in the file
        sed -i.bak "s/$search_word/$current_directory_name/g" "$file_path"
        # Remove the backup file created by sed on macOS
        rm -f "$file_path.bak"
        echo "Word '$search_word' replaced with '$current_directory_name' in $file_path"
    else
        echo "File not found: $file_path"
    fi
done

# Remove rename.bash and build.bash
rm -f build.bash rename.bash

# Remove .git folder
rm -rf .git
