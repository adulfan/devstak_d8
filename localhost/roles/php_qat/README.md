# Install the PHP QA Toolchain.

See http://phpqat.org ## check this!

These tools are installed with `brew` globally so any build tool or IDE on your
host machine can easily use them in a non-project specific way. Adjust as
needed.

## Variables:
- `php_qat_state`: install state: could be `latest` or `absent` etc. (default: `present`)
- `php_qat_packages`: list of packags to install (see [defaults/main.yml](defaults/main.yml))
