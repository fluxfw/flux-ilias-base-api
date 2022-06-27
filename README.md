# flux-ilias-base-api

ILIAS Base Api

## Installation

Hint: Use `latest` as `%tag%` (or omit it) for get the latest build

### Non-Composer

```dockerfile
COPY --from=docker-registry.fluxpublisher.ch/flux-ilias-api/base-api:%tag% /flux-ilias-base-api /%path%/libs/flux-ilias-base-api
```

or

```dockerfile
RUN (mkdir -p /%path%/libs/flux-ilias-base-api && cd /%path%/libs/flux-ilias-base-api && wget -O - https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-ilias-api/base-api.tar.gz?tag=%tag% | tar -xz --strip-components=1)
```

or

Download https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-ilias-api/base-api.tar.gz?tag=%tag% and extract it to `/%path%/libs/flux-ilias-base-api`

Hint: If you use `wget` without pipe use `--content-disposition` to get the correct file name

#### Usage

```php
require_once __DIR__ . "/%path%/libs/flux-ilias-base-api/autoload.php";
```

### Composer

```json
{
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "flux/flux-ilias-base-api",
                "version": "%tag%",
                "dist": {
                    "url": "https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-ilias-api/base-api.tar.gz?tag=%tag%",
                    "type": "tar"
                },
                "autoload": {
                    "files": [
                        "autoload.php"
                    ]
                }
            }
        }
    ],
    "require": {
        "flux/flux-ilias-base-api": "*"
    }
}
```
