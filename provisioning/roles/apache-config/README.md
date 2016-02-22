# Apache configuration

This is a role to configure Apache virtual hosts inside the VM. It can be
included multiple times, with different settings, to create more than one vhost
file.

## Instructions

To include this role from another role, include this one from `meta/main.yml`:

```yaml
dependencies:
- role: apache-config
  apache_name: laravel
  apache_hostname: laravel.{{ project_hostname }}
  apache_docroot: "{{ project_docroot }}/laravel/public }}"
```

To include this role from a playbook, that goes under the `roles` key instead of
the `dependencies` key:

```yaml
- hosts: devstack
  roles:
  - common
  - role: apache-config
    apache_name: devstack
    apache_hostname: devstack.vm
    apache_docroot: /var/www/devstack/docroot
```

## Variables

- `apache_name`: used in the vhost and log file names
  (default `{{ project_name }}`)
- `apache_hostname`: the full hostname (default `{{ project_hostname }}`)
- `apache_docroot`: the full path to the document root
  (default `{{ project_docroot }}`)

## Author Information

NorthPoint Digital
