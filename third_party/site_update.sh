#!/bin/bash
cd ideascale
rm -r *
wget --no-clobber --page-requisites --html-extension --convert-links --restrict-file-names=windows --domains ideascale.com --no-parent ideas.ideascale.com .
cd ideas.ideascale.com/
sed -r 's#</head>#<link rel="stylesheet" type="text/css" href="css/custom.css"/></head>#' index.html > tmpindex.html 
mv tmpindex.html index.html
tidy -q -m -wrap 0 -indent --indent-spaces 4 --doctype strict index.html 
