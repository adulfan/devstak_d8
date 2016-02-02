# Ansible Group Variables

You can use this directory to override any default variables from the roles,
defined in `<role>/defaults/main.yml`. Definitions in `all` apply to all servers
in the project.  If you have different server groups in your project, such as
database, web, cache, then you can specify variables for each group by creating
files in this directory named after the groups.


For example, to install the `devstack` files in a subdirectory of the document
root, uncomment the `devstack_docroot` line in `all`.
