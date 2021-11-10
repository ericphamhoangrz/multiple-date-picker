Nova.booting((Vue, router, store) => {
  Vue.component('index-multiple-date-picker', require('./components/IndexField'))
  Vue.component('detail-multiple-date-picker', require('./components/DetailField'))
  Vue.component('form-multiple-date-picker', require('./components/FormField'))
  Vue.component('multiple-date-picker', require('./components/MultipleDatePicker'))
})
