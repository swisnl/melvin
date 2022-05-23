# Changelog

All notable changes to `swisnl\melvin` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](https://keepachangelog.com/) principles.

## Unreleased

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
