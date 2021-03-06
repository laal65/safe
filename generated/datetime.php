<?php

namespace Safe;

use Safe\Exceptions\DatetimeException;

/**
 * Returns associative array with detailed info about given date.
 *
 * @param string $format Format accepted by DateTime::createFromFormat.
 * @param string $date String representing the date.
 * @return array Returns associative array with detailed info about given date.
 * @throws DatetimeException
 *
 */
function date_parse_from_format(string $format, string $date): array
{
    error_clear_last();
    $result = \date_parse_from_format($format, $date);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param string $date Date in format accepted by strtotime.
 * @return array Returns array with information about the parsed date
 * on success .
 * @throws DatetimeException
 *
 */
function date_parse(string $date): array
{
    error_clear_last();
    $result = \date_parse($date);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param int $time Timestamp.
 * @param float $latitude Latitude in degrees.
 * @param float $longitude Longitude in degrees.
 * @return array Returns array on success .
 * The structure of the array is detailed in the following list:
 *
 *
 *
 * sunrise
 *
 *
 * The time of the sunrise (zenith angle = 90°35').
 *
 *
 *
 *
 * sunset
 *
 *
 * The time of the sunset (zenith angle = 90°35').
 *
 *
 *
 *
 * transit
 *
 *
 * The time when the sun is at its zenith, i.e. has reached its topmost
 * point.
 *
 *
 *
 *
 * civil_twilight_begin
 *
 *
 * The start of the civil dawn (zenith angle = 96°). It ends at sunrise.
 *
 *
 *
 *
 * civil_twilight_end
 *
 *
 * The end of the civil dusk (zenith angle = 96°). It starts at sunset.
 *
 *
 *
 *
 * nautical_twilight_begin
 *
 *
 * The start of the nautical dawn (zenith angle = 102°). It ends at
 * civil_twilight_begin.
 *
 *
 *
 *
 * nautical_twilight_end
 *
 *
 * The end of the nautical dusk (zenith angle = 102°). It starts at
 * civil_twilight_end.
 *
 *
 *
 *
 * astronomical_twilight_begin
 *
 *
 * The start of the astronomical dawn (zenith angle = 108°). It ends at
 * nautical_twilight_begin.
 *
 *
 *
 *
 * astronomical_twilight_end
 *
 *
 * The end of the astronomical dusk (zenith angle = 108°). It starts at
 * nautical_twilight_end.
 *
 *
 *
 *
 *
 * The values of the array elements are either UNIX timestamps, FALSE if the
 * sun is below the respective zenith for the whole day, or TRUE if the sun is
 * above the respective zenith for the whole day.
 * @throws DatetimeException
 *
 */
function date_sun_info(int $time, float $latitude, float $longitude): array
{
    error_clear_last();
    $result = \date_sun_info($time, $latitude, $longitude);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * date_sunrise returns the sunrise time for a given
 * day (specified as a timestamp) and location.
 *
 * @param int $timestamp The timestamp of the day from which the sunrise
 * time is taken.
 * @param int $format
 * format constants
 *
 *
 *
 * constant
 * description
 * example
 *
 *
 *
 *
 * SUNFUNCS_RET_STRING
 * returns the result as string
 * 16:46
 *
 *
 * SUNFUNCS_RET_DOUBLE
 * returns the result as float
 * 16.78243132
 *
 *
 * SUNFUNCS_RET_TIMESTAMP
 * returns the result as integer (timestamp)
 * 1095034606
 *
 *
 *
 *
 * @param float $latitude Defaults to North, pass in a negative value for South.
 * See also: date.default_latitude
 * @param float $longitude Defaults to East, pass in a negative value for West.
 * See also: date.default_longitude
 * @param float $zenith zenith is the angle between the center of the sun
 * and a line perpendicular to earth's surface. It defaults to
 * date.sunrise_zenith
 *
 * Common zenith angles
 *
 *
 *
 * Angle
 * Description
 *
 *
 *
 *
 * 90°50'
 * Sunrise: the point where the sun becomes visible.
 *
 *
 * 96°
 * Civil twilight: conventionally used to signify the start of dawn.
 *
 *
 * 102°
 * Nautical twilight: the point at which the horizon starts being visible at sea.
 *
 *
 * 108°
 * Astronomical twilight: the point at which the sun starts being the source of any illumination.
 *
 *
 *
 *
 * @param float $gmt_offset Specified in hours.
 * The gmtoffset is ignored, if
 * format is
 * SUNFUNCS_RET_TIMESTAMP.
 * @return mixed Returns the sunrise time in a specified format on
 * success . One potential reason for failure is that the
 * sun does not rise at all, which happens inside the polar circles for part of
 * the year.
 * @throws DatetimeException
 *
 */
function date_sunrise(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null, float $gmt_offset = 0)
{
    error_clear_last();
    $result = \date_sunrise($timestamp, $format, $latitude, $longitude, $zenith, $gmt_offset);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * date_sunset returns the sunset time for a given
 * day (specified as a timestamp) and location.
 *
 * @param int $timestamp The timestamp of the day from which the sunset
 * time is taken.
 * @param int $format
 * format constants
 *
 *
 *
 * constant
 * description
 * example
 *
 *
 *
 *
 * SUNFUNCS_RET_STRING
 * returns the result as string
 * 16:46
 *
 *
 * SUNFUNCS_RET_DOUBLE
 * returns the result as float
 * 16.78243132
 *
 *
 * SUNFUNCS_RET_TIMESTAMP
 * returns the result as integer (timestamp)
 * 1095034606
 *
 *
 *
 *
 * @param float $latitude Defaults to North, pass in a negative value for South.
 * See also: date.default_latitude
 * @param float $longitude Defaults to East, pass in a negative value for West.
 * See also: date.default_longitude
 * @param float $zenith zenith is the angle between the center of the sun
 * and a line perpendicular to earth's surface. It defaults to
 * date.sunset_zenith
 *
 * Common zenith angles
 *
 *
 *
 * Angle
 * Description
 *
 *
 *
 *
 * 90°50'
 * Sunset: the point where the sun becomes invisible.
 *
 *
 * 96°
 * Civil twilight: conventionally used to signify the end of dusk.
 *
 *
 * 102°
 * Nautical twilight: the point at which the horizon ends being visible at sea.
 *
 *
 * 108°
 * Astronomical twilight: the point at which the sun ends being the source of any illumination.
 *
 *
 *
 *
 * @param float $gmt_offset Specified in hours.
 * The gmtoffset is ignored, if
 * format is
 * SUNFUNCS_RET_TIMESTAMP.
 * @return mixed Returns the sunset time in a specified format on
 * success . One potential reason for failure is that the
 * sun does not set at all, which happens inside the polar circles for part of
 * the year.
 * @throws DatetimeException
 *
 */
function date_sunset(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null, float $gmt_offset = 0)
{
    error_clear_last();
    $result = \date_sunset($timestamp, $format, $latitude, $longitude, $zenith, $gmt_offset);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the Unix timestamp corresponding to the arguments
 * given. This timestamp is a long integer containing the number of
 * seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time
 * specified.
 *
 * Arguments may be left out in order from right to left; any
 * arguments thus omitted will be set to the current value according
 * to the local date and time.
 *
 * @param int $hour The number of the hour relative to the start of the day determined by
 * month, day and year.
 * Negative values reference the hour before midnight of the day in question.
 * Values greater than 23 reference the appropriate hour in the following day(s).
 * @param int $minute The number of the minute relative to the start of the hour.
 * Negative values reference the minute in the previous hour.
 * Values greater than 59 reference the appropriate minute in the following hour(s).
 * @param int $second The number of seconds relative to the start of the minute.
 * Negative values reference the second in the previous minute.
 * Values greater than 59 reference the appropriate second in the following minute(s).
 * @param int $month The number of the month relative to the end of the previous year.
 * Values 1 to 12 reference the normal calendar months of the year in question.
 * Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc.
 * Values greater than 12 reference the appropriate month in the following year(s).
 * @param int $day The number of the day relative to the end of the previous month.
 * Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month.
 * Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc.
 * Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).
 * @param int $year The number of the year, may be a two or four digit value,
 * with values between 0-69 mapping to 2000-2069 and 70-100 to
 * 1970-2000. On systems where time_t is a 32bit signed integer, as
 * most common today, the valid range for year
 * is somewhere between 1901 and 2038. However, before PHP 5.1.0 this
 * range was limited from 1970 to 2038 on some systems (e.g. Windows).
 * @param int $is_dst This parameter can be set to 1 if the time is during daylight savings time (DST),
 * 0 if it is not, or -1 (the default) if it is unknown whether the time is within
 * daylight savings time or not. If it's unknown, PHP tries to figure it out itself.
 * This can cause unexpected (but not incorrect) results.
 * Some times are invalid if DST is enabled on the system PHP is running on or
 * is_dst is set to 1. If DST is enabled in e.g. 2:00, all times
 * between 2:00 and 3:00 are invalid and mktime returns an undefined
 * (usually negative) value.
 * Some systems (e.g. Solaris 8) enable DST at midnight so time 0:30 of the day when DST
 * is enabled is evaluated as 23:30 of the previous day.
 *
 * As of PHP 5.1.0, this parameter became deprecated. As a result, the
 * new timezone handling features should be used instead.
 *
 * This parameter has been removed in PHP 7.0.0.
 * @return int mktime returns the Unix timestamp of the arguments
 * given.
 * If the arguments are invalid, the function returns FALSE (before PHP 5.1
 * it returned -1).
 * @throws DatetimeException
 *
 */
function mktime(int $hour = null, int $minute = null, int $second = null, int $month = null, int $day = null, int $year = null, int $is_dst = -1): int
{
    error_clear_last();
    $result = \mktime($hour, $minute, $second, $month, $day, $year, $is_dst);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * strptime returns an array with the
 * date parsed, .
 *
 * Month and weekday names and other language dependent strings respect the
 * current locale set with setlocale (LC_TIME).
 *
 * @param string $date The string to parse (e.g. returned from strftime).
 * @param string $format The format used in date (e.g. the same as
 * used in strftime). Note that some of the format
 * options available to strftime may not have any
 * effect within strptime; the exact subset that are
 * supported will vary based on the operating system and C library in
 * use.
 *
 * For more information about the format options, read the
 * strftime page.
 * @return array Returns an array .
 *
 *
 * The following parameters are returned in the array
 *
 *
 *
 * parameters
 * Description
 *
 *
 *
 *
 * "tm_sec"
 * Seconds after the minute (0-61)
 *
 *
 * "tm_min"
 * Minutes after the hour (0-59)
 *
 *
 * "tm_hour"
 * Hour since midnight (0-23)
 *
 *
 * "tm_mday"
 * Day of the month (1-31)
 *
 *
 * "tm_mon"
 * Months since January (0-11)
 *
 *
 * "tm_year"
 * Years since 1900
 *
 *
 * "tm_wday"
 * Days since Sunday (0-6)
 *
 *
 * "tm_yday"
 * Days since January 1 (0-365)
 *
 *
 * "unparsed"
 * the date part which was not
 * recognized using the specified format
 *
 *
 *
 *
 * @throws DatetimeException
 *
 */
function strptime(string $date, string $format): array
{
    error_clear_last();
    $result = \strptime($date, $format);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * Each parameter of this function uses the default time zone unless a
 * time zone is specified in that parameter.  Be careful not to use
 * different time zones in each parameter unless that is intended.
 * See date_default_timezone_get on the various
 * ways to define the default time zone.
 *
 * @param string $time A date/time string. Valid formats are explained in Date and Time Formats.
 * @param int $now The timestamp which is used as a base for the calculation of relative
 * dates.
 * @return int Returns a timestamp on success, FALSE otherwise. Previous to PHP 5.1.0,
 * this function would return -1 on failure.
 * @throws DatetimeException
 *
 */
function strtotime(string $time, int $now = null): int
{
    error_clear_last();
    $result = \strtotime($time, $now);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param string $abbr Time zone abbreviation.
 * @param int $gmtOffset Offset from GMT in seconds. Defaults to -1 which means that first found
 * time zone corresponding to abbr is returned.
 * Otherwise exact offset is searched and only if not found then the first
 * time zone with any offset is returned.
 * @param int $isdst Daylight saving time indicator. Defaults to -1, which means that
 * whether the time zone has daylight saving or not is not taken into
 * consideration when searching. If this is set to 1, then the
 * gmtOffset is assumed to be an offset with
 * daylight saving in effect; if 0, then gmtOffset
 * is assumed to be an offset without daylight saving in effect. If
 * abbr doesn't exist then the time zone is
 * searched solely by the gmtOffset and
 * isdst.
 * @return string Returns time zone name on success .
 * @throws DatetimeException
 *
 */
function timezone_name_from_abbr(string $abbr, int $gmtOffset = -1, int $isdst = -1): string
{
    error_clear_last();
    $result = \timezone_name_from_abbr($abbr, $gmtOffset, $isdst);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}
