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
  apache_port: "{{ laravel_port }}"
  apache_ssl_port: "{{ laravel_ssl_port }}"
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
    # Use the default ports.
```

This role can be included more than once, with different variables. Be careful
when you do this: if you override a variable the first time you include this
role, that override becomes the new default for the next time you include it.

In fact, if you override a variable when declaring a dependency, then the
defaults are overridden even if you include this role from an earlier one.
Looks like a bug to me:  https://github.com/ansible/ansible/issues/14840
It is safest to define all role variables when including a role.

## Variables

- `apache_name`: used in the vhost and log file names
  (default `{{ project_name }}`)
- `apache_hostname`: the full hostname (default `{{ project_hostname }}`)
- `apache_docroot`: the full path to the document root
  (default `{{ project_docroot }}`)
- `apache_port`: the port on which to listen for HTTP (default: `"80"`)
- `apache_ssl_port`: the port on which to listen for HTTPS (default: `"443"`)

## Author Information

NorthPoint Digital
