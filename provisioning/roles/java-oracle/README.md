# Java

This is a role to install and configure Java (Oracle version) inside the host VM
according to your project standards and needs.

## Instructions

Enable this role by uncommenting the `java-oracle` line in the main `playbook.yml`.

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

### MySQL connector variables

- `java_mysql_path`: where the connector will be installed
- `java_mysql_jar`: file name of the `jar` file, defaults to
  `mysql-connector-java-5.1.38-bin.jar`

## Author Information

NorthPoint Digital
