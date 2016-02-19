# Apache configuration

This is a role to configure Apache virtual hosts inside the VM. It can be
included multiple times, with different settings, to create more than one vhost
file.

## Instructions

To include this role from another role, include this one from `meta/main.yml`:

```yaml
dependencies:
- role: apache-config
  project_name: laravel
  project_hostname: laravel.{{ project_hostname }}
  project_docroot: "{{ project_docroot }}/laravel/public }}"
```

To include this role from a playbook, that goes under the `roles` key instead of
the `dependencies` key:

```yaml
- hosts: devstack
  roles:
  - common
  - role: apache-config
    project_name: devstack
    project_hostname: devstack.vm
    project_docroot: /var/www/devstack/docroot
```

## Variables

- `project_name`: used in the vhost and log file names (default `devstack`)
- `project_hostname`: the full hostname (default `devstack.vm`)
- `project_docroot`: the full path to the document root
  (default `/var/www/devstack/docroot`)

## Author Information

NorthPoint Digital
