#!/bin/bash

# Make the rename.bash script executable
chmod +x rename.bash

# Run the rename.bash script
./rename.bash

# Define current directory
current_directory=$(pwd)

# Get the name of the current directory (basename)
current_directory_name=$(basename "$current_directory")

# Build image(s)
docker build -t $current_directory_name . 

#run container
docker compose up