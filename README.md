## TYPO3 menu comparison

There are various ways to create a menu with TYPO3. For large menus (several
hundred entries) there may be differences in performance.

This repository contains a test project and different menu variants so that
they can be compared with each other under the same conditions.

### URLs
* Frontend: https://menus.ddev.site
* Backend: https://menus.ddev.site/typo3/
* XHGui: http://menus.ddev.site:8142

### Quick start

`ddev initialize` will:
* import a SQL-dump containing over 1,000 pages-records.
* setup TYPO3 v12
* install a sitepackage containing 5 (plus 2) variants of identical menu

### Backend
| Key      | Value        |
|----------|--------------|
| User     | admin        |
| Password | Password_!23 |


### Acknowledgements
Many thanks to [in2code GmbH](https://www.in2code.de/) for giving me the
opportunity to take a closer look at the menus, partly during my working hours.
