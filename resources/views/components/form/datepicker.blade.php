<input
   x-data
   x-ref="input"
   x-init="new Pikaday({ 
      field: $refs.input, 
      disableWeekends: true,
      format: 'ddd MMM DD, YYYY',
      onSelect: function (date) { 
         $dispatch('input', moment(date).format('ddd MMM DD, YYYY'));
      },
      minDate: moment().toDate()
   })"
   type="text"
   {{ $attributes }}
>