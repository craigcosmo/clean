
// import dirScan from '../dist/index.js'

import dirScan from '../index.js'
import {expect, assert} from 'chai'




describe('testing directory scan package', function () {
	it('should read file', () => {
		let a = dirScan.get('./project/')

		console.log(a)


	})
	
})
