'use strict';

var _fs = require('fs');

var _fs2 = _interopRequireDefault(_fs);

var _glob = require('glob');

var _glob2 = _interopRequireDefault(_glob);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

function findDup(arr) {

	var duplicates = [];
	var i = void 0,
	    j = void 0;
	for (i = 0, j = arr.length; i < j; i++) {
		if (duplicates.indexOf(arr[i]) === -1 && arr.indexOf(arr[i], i + 1) !== -1) {
			duplicates.push(arr[i]);
		}
	}
	return duplicates;
}

function getClassFromSouce(string) {

	var pattern = /.+?class="(.+?)".+?/g;

	var match = pattern.exec(string);
	var arr = [];

	while (match != null) {
		match[1].split(" ").forEach(function (x) {
			return arr.push(x.trim());
		});
		match = pattern.exec(string);
	}
	// remove duplicate
	var unique = [].concat(_toConsumableArray(new Set(arr)));

	// console.log(arr);
	return unique;
}
function getAllClassNameCssFile(string) {
	var pattern = /(?:[\.]{1})([a-zA-Z_]+[\w-_]*)(?:[\s\.\{\>#\:]{1})/igm;

	var match = string.match(pattern);

	var d = match.map(function (i) {
		return i.replace(/{|}/g, '').trim();
	});

	// remove duplicate
	var unique = [].concat(_toConsumableArray(new Set(d)));
	// remove word start and end with dot
	var g = unique.filter(function (i) {
		return !i.match(/^\..+\.$/g);
	});
	// remove pseudo colon
	var f = g.map(function (i) {
		return i.replace(/\:$/ig, '');
	});
	// remove dot prefix
	var t = f.map(function (i) {
		return i.replace(/^\./ig, '');
	});
	return t;
	// console.log(d);
}
function getDiff(a1, a2) {

	var a = [],
	    diff = [];

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
	scan: function scan(dir) {
		var a = _glob2.default.sync(dir + '**');
		// get files only
		var b = a.filter(function (i) {
			return !_fs2.default.statSync(i).isDirectory();
		});

		var text = '';
		b.map(function (i) {
			var u = _fs2.default.readFileSync(i, 'utf8');
			text = text + u;
		});
		return text;
	},
	findDuplicate: function findDuplicate(sourceCode, cssFile) {

		var css = getAllClassNameCssFile(this.scan(cssFile));

		var source = getClassFromSouce(this.scan(sourceCode));

		var d = getDiff(css, source);

		return d;
	}

};