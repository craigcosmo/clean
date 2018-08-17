

import dirScan from '../index.js'
import {expect, assert} from 'chai'

describe('scan result', function () {
	it('find dup css', () => {
		let a = dirScan.findDuplicate('./project/', './css/')
		console.log(a)
	})
})
