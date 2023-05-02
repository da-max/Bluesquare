import './bootstrap'
import '../css/app.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'
import { defineCustomElement } from 'vue'
import Example from './Example.ce.vue'

customElements.define('my-example', defineCustomElement(Example))
