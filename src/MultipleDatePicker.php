<?php

namespace Retailzoo\MultipleDatePicker;

use Laravel\Nova\Fields\Field;

class MultipleDatePicker extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'multiple-date-picker';

    /**
     * Cast format from DateTime instance.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d';

    /**
     * Set the first day of the week.
     *
     * @param  int  $day
     * @return $this
     */
    public function firstDayOfWeek($day)
    {
        return $this->withMeta([__FUNCTION__ => $day]);
    }

    /**
     * Set the date format (Moment.js) that should be used to display the date.
     *
     * @param  string  $format
     * @return $this
     */
    public function format($format)
    {
        return $this->withMeta([__FUNCTION__ => $format]);
    }

    /**
     * Set the date format (flatpickr.js) that should be used in the input field (picker).
     *
     * @param  string  $format
     * @return $this
     */
    public function pickerFormat($format)
    {
        return $this->withMeta([__FUNCTION__ => $format]);
    }

    /**
     * Set a readable date format, that should be used to display the date to the user.
     *
     * @param  string  $format
     * @return $this
     */
    public function pickerDisplayFormat($format)
    {
        return $this->withMeta([__FUNCTION__ => $format]);
    }

    /**
     * Set picker hour increment.
     *
     * @param  int  $increment
     * @return $this
     */
    public function incrementPickerHourBy($increment)
    {
        throw new \Exception('The `incrementPickerHourBy` option is not available on Date fields.');
    }

    /**
     * Set picker minute increment.
     *
     * @param  int  $increment
     * @return $this
     */
    public function incrementPickerMinuteBy($increment)
    {
        throw new \Exception('The `incrementPickerMinuteBy` option is not available on Date fields.');
    }
}
