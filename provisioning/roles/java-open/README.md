# Java

This is a role to install and configure Java (OpenJDK version) inside the host
VM according to your project standards and needs.

## Instructions

Enable the `java-open` role by uncommenting the appropriate line in the main
`playbook.yml`.

## Variables
- `java_main_version`: major version number (default: `7`)
- `java_jre_or_jdk`: whether to install the JRE or JDK (default: `jre`)

## Author Information

NorthPoint Digital
