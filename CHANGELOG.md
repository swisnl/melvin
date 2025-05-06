# Changelog

All notable changes to `swisnl\melvin` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](https://keepachangelog.com/) principles.

## Unreleased
- Nothing.

## [2.0.1] - 2025-05-01

### Fixed
- Add ternary check for optional vehicleTypes and boatTypes.

## [2.0.0] - 2025-03-11

### Changed
- Changed enum cases from `SCREAMING_SNAKE_CASE` to `PascalCase`.
- Refactored enum classes from [myclabs/php-enum](https://github.com/myclabs/php-enum) to PHP native enums. Please see [native-enums-and-migration](https://github.com/myclabs/php-enum?tab=readme-ov-file#native-enums-and-migration) for information on how to migrate.

## [1.5.5] - 2025-02-18

### Fixed
- Fixed a bug that caused activityType to always be WORK.

## [1.5.4] - 2025-01-22

### Fixed
- Location city can be null.

## [1.5.3] - 2024-10-22

### Fixed
- Location district can be null.

## [1.5.2] - 2024-09-09

### Added
- Add BUS to TransportMode enum.

## [1.5.1] - 2024-07-23

### Added
- Add RAILWAY to AreaType enum.

## [1.5.0] - 2024-06-26

### Added
- Add changedById to Contact.
- Add RAIL to TransportMode enum.
- Add BUS to VehicleType enum.
- Add RAILWAY to RoadAuthorityType enum.

### Changed
- Drop PHP <8.1 support.

## [1.4.1] - 2024-04-05

### Fixed
- Add MISCELLANEOUS to AreaType enum.

## [1.4.0] - 2024-03-14

### Added
- Add permitId, referenceId, remarks and contacts to Situation.
- Add widthCharacteristic and grossWeightCharacteristic to Restriction VehicleInformation.

### Changed
- Drop PHP <8 support.
- Cleanup invalid URLs.
- Sort periods on start date.
- Omit "Overall date" period.

### Fixed
- Use situation id as fallback for RoadAuthority without id.

## [1.3.3] - 2023-02-09

### Fixed
- Use new NDW Keycloak authentication server.

## [1.3.2] - 2022-12-19

### Fixed
- Check if properties aren't empty before using them.

## [1.3.1] - 2022-12-12

### Fixed
- Add UNKNOWN to RoadAuthorityType enum.

## [1.3.0] - 2022-12-12

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
