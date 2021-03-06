# Changelog

All notable changes to `swisnl\melvin` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](https://keepachangelog.com/) principles.

## Unreleased
- Nothing.

## [1.2.0] - 2022-05-27

### Fixed
- Use new NDW Keycloak authentication server. Please note, this fix introduces a small breaking change as the constructor arguments of the `HttpClient` have changed.

## [1.1.1] - 2022-05-23

### Fixed
- Add ROAD_AUTHORITY to AreaType enum.

## [1.1.0] - 2022-05-11

### Fixed
- Do not guess activityType, but use the new field from the API.
- Improve parsing of createdAt timestamps.
- Treat restriction geometry as optional.

### Added
- Add lastChangedAt timestamp.
- Add impactDescription.

## [1.0.1] - 2022-01-10

### Fixed
- Set timezone (UTC) on all dates.
