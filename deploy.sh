#!/bin/bash

# deployment script for my production env on cxseries.com
cd `dirname $0`

# Extract the package
tar -xzf package.tgz
rm package.tgz

# Copy any file we want to keep from build to build
# cp www/app/config/parameters.yml build/app/config/parameters.yml

# Swap it all around, keeping the previous version aside in case something goes wrong
rm -rf wp-content/themes/cxseries_old
mv wp-content/themes/cxseries wp-content/themes/cxseries_old
mv build wp-content/themes/cxseries