#!/usr/bin/env bash

main() {
  MELVIN_USERNAME=${MELVIN_USERNAME:?'MELVIN_USERNAME environment variable missing.'}
  MELVIN_PASSWORD=${MELVIN_PASSWORD:?'MELVIN_PASSWORD environment variable missing.'}

  echo "Updating fixtures..." >&2

  echo "  requesting token..." >&2
  token=$(curl https://iam.ndw.nu/auth/realms/ndw/protocol/openid-connect/token \
    -X POST \
    -H "Content-Type: application/x-www-form-urlencoded" \
    --data-urlencode "client_id=melvin-frontend-test" \
    --data-urlencode "grant_type=password" \
    --data-urlencode "username=${MELVIN_USERNAME}" \
    --data-urlencode "password=${MELVIN_PASSWORD}" \
    -s \
    | jq -r .access_token)

  echo "  exporting areas..." >&2
  curl https://melvin.ndw.nu/melvinservice/rest/area/all \
    -H "Accept: application/json" \
    -H "Authorization: Bearer ${token}" \
    -s \
    | jq > tests/_fixtures/melvin.ndw.nu/melvinservice/rest/area/all.get.mock

  echo "  exporting situations..." >&2
  curl https://melvin.ndw.nu/melvinservice/rest/export \
    -X POST \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -H "Authorization: Bearer ${token}" \
    -d '{"areaIds": [443], "areaBuffer": 0, "includeDetours": true}' \
    -s \
    | jq > tests/_fixtures/melvin.ndw.nu/melvinservice/rest/export.post.mock

  echo "Done!" >&2
}

(
  set -euo pipefail
  main
)
