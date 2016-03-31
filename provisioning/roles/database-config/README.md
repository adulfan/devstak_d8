# Create a database and user

This is a role to create a database and a user for that database inside the
guest VM. If you need more than one database for your project, then you can
require this role multiple times.

## Instructions

### From a playbook, you can include this role like so:

```yaml
- hosts: devstack
  sudo: yes
  vars:
    - database_name: baseball
    - database_user: jeter
    - database_password: "{{ not_commited_to_git }}"
    - database_dump: yankees.sql.gz
  roles:
    - { role: database-config }
```

- You can use a level of indirection, as above, to avoid putting the password in
  the playbook.
- You can define the variables elsewhere, such as in `group_vars/all`.
- You can define some or all of the variables when including the role.
- By default, Ansible looks for files in the `files/` directory inside this
  role and the `files/` directory next to the playbook.
- You can include this role more than once, with different variables. Beware:
  when you do this, variables that you override when including the role will
  affect later includes.

For example, to create two databases to be accessed by the same mysql user, you
could do this:

```yaml
- hosts: devstack
  sudo: yes
  vars:
    - database_name: baseball
    - database_user: jeter
    - database_password: "{{ not_commited_to_git }}"
  roles:
    - { role: database-config, database_dump: 'yankees.sql.gz' } # Use the defaults.
    - { role: database-config, database_name: 'champions', database_dump: false }
```

Note that, in the second include, we cannot rely on the default defined for the
`database_dump` variable.

### To include this role from another role, add this one to the requirements in the including role's `meta/main.yml`:

```yaml
dependencies:
  - { role: database-config, database_name: "{{ this_db_name }}" }
```

where `this_db_name` is defined in the role's `defaulta/main.yml` and can be
overridden as usual.

It looks like a bug to me, but variables overridden this way take precendence
over the defaults every time the role is included, either directly from the
playbook or as a dependency, even as a dependency of an earlier-included role:
https://github.com/ansible/ansible/issues/14840
It is safest to declare all role variables when including this role.

## Variables

- `database_name`: name of the database to create (default: `devstack`)
- `database_user`: mysql user that will access the database (default: `vagrant`)
- `database_password`: password for the mysql user (default: `vagrant`)
- `database_dump`: file name of the SQL dump to import if the database is empty
  (default: `false`)

## Author Information

NorthPoint Digital
