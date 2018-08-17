import fs from 'fs'
import glob from 'glob'


function findDup(arr) {

	let duplicates = []
	let i, j
	for (i = 0, j = arr.length; i < j; i++) {
		if (duplicates.indexOf(arr[i]) === -1 && arr.indexOf(arr[i], i+1) !== -1) {
			duplicates.push(arr[i])
		}
	}
	return duplicates
}

function getClassFromSouce(string){
	
	let pattern = /.+?class="(.+?)".+?/g

	let match = pattern.exec(string);
	let arr = []

	while (match != null) {
	  match[1].split(" ").forEach(x => arr.push(x.trim()));
	  match = pattern.exec(string)
	}
	// remove duplicate
	let unique = [...new Set(arr)]

	// console.log(arr);
	return unique
}
function getAllClassNameCssFile(string){
	let pattern = /(?:[\.]{1})([a-zA-Z_]+[\w-_]*)(?:[\s\.\{\>#\:]{1})/igm

	let match = string.match(pattern);

	let d = match.map( (i) => i.replace(/{|}/g,'').trim())

	// remove duplicate
	let unique = [...new Set(d)]
	// remove word start and end with dot
	let g = unique.filter((i) => !i.match(/^\..+\.$/g))
	// remove pseudo colon
	let f = g.map( i => i.replace(/\:$/ig,''))
	// remove dot prefix
	let t = f.map( i => i.replace(/^\./ig,''))
	return t
	// console.log(d);
}
function getDiff (a1, a2) {

    var a = [], diff = [];

    for (var i = 0; i < a1.length; i++) {
        a[a1[i]] = true;
    }

    for (var i = 0; i < a2.length; i++) {
        if (a[a2[i]]) {
            delete a[a2[i]];
        } else {
            a[a2[i]] = true;
        }
    }

    for (var k in a) {
        diff.push(k);
    }

    return diff;
}

module.exports = {
	scan : function(dir) {
		let a = glob.sync(dir+'**')
		// get files only
		let b = a.filter( i => !fs.statSync(i).isDirectory())

		let text = ''
		b.map( i => {
				let u = fs.readFileSync(i, 'utf8')
				text = text + u
			})
		return text
	},
	findDuplicate : function(sourceCode, cssFile) {

		let css = getAllClassNameCssFile(this.scan(cssFile))

		let source = getClassFromSouce(this.scan(sourceCode))


		let d = getDiff(css, source)

		return d
	}

}

