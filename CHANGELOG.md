# Changelog

All notable changes to `swisnl\melvin` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](https://keepachangelog.com/) principles.

## Unreleased

### Changed
- Allow setting null for period start or end.
- Explicitly add Accept header.

## [1.2.1] - 2022-09-27

### Fixed
- Add UNKNOWN to WorkType enum.
- Make RoadAuthorityType nullable on RoadAuthority.
- Treat situation impact and url as optional.
- Do not fail if (EXTERNAL_)RESTRICTION is missing in API.

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
