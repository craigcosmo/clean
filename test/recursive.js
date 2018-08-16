
// import dirScan from '../dist/index.js'

import dirScan from '../index.js'
import {expect, assert} from 'chai'




describe('scan result', function () {
	// it('show class from css files', () => {
	// 	let a = dirScan.scanCss('./css/')
	// 	// console.log(a)
	// })
	// it('show class from view files', () => {
	// 	let a = dirScan.scanCode('./project/')
	// 	// console.log(a)
	// })
	it('find dup css', () => {
		let a = dirScan.findDuplicate('./project/', './css/')
		console.log(a)
	})
	
})
