
## What is this?

This finds all css class name inside source and compare it with css in index.css. the sort out the difference, which is the redundant css, which can be deleted manually


## Installation

`npm i --save-dev css-clean-site-wide`

## Usage

Create a test file, call it whatever you like, and put it in test folder at root

```js
import dirScan from 'css-clean-site-wide'
import {expect, assert} from 'chai'

describe('scan result', function () {
    it('find dup css', () => {
        let a = dirScan.findDuplicate('./project/', './css/')
        // project is folder contains your source (html, php, js...)
        // css is the folder contains your css file (index.css, main.css...)
        console.log(a)
    })
})

```

run this command in terminal 

```bash
mocha --watch --compilers js:babel-register
```
expected output ['.a','.b','.c', '.someclass']