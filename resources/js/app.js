require('./bootstrap')

import Alpine from 'alpinejs'

Alpine.store('collapsedSidebar', {
   init() {
      this.on = JSON.parse(sessionStorage.getItem('collapsedSidebar')) ?? false
   },

   on: false,

   toggle() {
      this.on = !this.on
      sessionStorage.setItem('collapsedSidebar', this.on);
   }
})

window.Alpine = Alpine

Alpine.start()