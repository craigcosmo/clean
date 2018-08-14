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
function fileNameFromPathName(arr){
	return arr.map( i => i.split('/').pop())
}
function getClassInTag(string){
	
	let pattern = /.+?class="(.+?)".+?/g

	let match = pattern.exec(string);
	let arr = []

	while (match != null) {
	  match[1].split(" ").forEach(x => arr.push(x.trim()));
	  match = pattern.exec(string)
	}

	console.log(arr);
}
function getAllClassNameFromFile(string){
	let pattern = /(?:[\.]{1})([a-zA-Z_]+[\w-_]*)(?:[\s\.\{\>#\:]{1})/igm

	let match = string.match(pattern);

	let d = match.map( (i) => i.replace(/{|}/g,'').trim())
	console.log(d);
}

function readFiles(dirname, onFileContent, onError) {
	fs.readdirSync(dirname, function(err, filenames) {
		if (err) {
			onError(err);
			return;
		}
		filenames.forEach(function(filename) {
			fs.readFile(dirname + filename, 'utf-8', function(err, content) {
				if (err) {
					onError(err);
					return;
				}
				onFileContent(filename, content);
			});
		});
	});
}
module.exports = {
	get : (dir) => {
		console.log(dir)
		fs.readdirSync(dir, function(err, filenames) {
			console.log(filenames)
			if (err) {
				onError(err);
				return;
			}
			filenames.forEach(function(filename) {
				fs.readFile(dir + filename, 'utf-8', function(err, content) {
					if (err) {
						onError(err);
						return;
					}
					console.log(filename);
				});
			});
		});
		
	}
}

