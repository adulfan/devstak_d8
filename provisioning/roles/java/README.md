# Java

This is a role to install and configure Java inside the host VM according to your project standards and needs.

## Instructions

Enable this role by uncommenting the `java` line in the main `playbook.yml`.

Download the required tarballs to the `src/` directory. See the [README](./src)
there for details.

Provision the VM as usual.

## Variables

### JRE variables:

- `java_tarball`: file name of the tarball you downloaded
- `java_expanded`: directory created by unpacking the tarball
- `java_path`: where java will be installed, defaults to
  `/usr/share/java/oracle/{{ java_expanded }}`

The role will create a symlink from the `java` executable to `/usr/bin/java`.

The JRE and JDK from Oracle use the same directory name, so the default value of
`jdk1.8.0_74` is not a typo.

### Database connector variables

- `db_connector_expanded`: directory created by unpacking the tarball
- `db_connector_path`: where the connector will be installed
- `db_connector_tarball`: file name of the tarball, defaults to
  `{{ db_connector_expanded }}.tar.gz`
- `db_connector_jar`: file name of the `jar` file, defaults to
  `{{ db_connector_expanded }}-bin.jar`

## Author Information

NorthPoint Digital
