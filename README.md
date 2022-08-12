# wp-vue-plugin

> A Vue.js project

## Build Setup

``` bash
  step 1 : npm install -g vue-cli
		
	step 2 : vue init webpack-simple project-name
	
	step 3 : npm install
	
	step 4 :
		"scripts": {
			"dev": "webpack --watch --progress --hide-modules",
			"dev-build": "webpack -d --mode development",
			"build": "cross-env NODE_ENV=production webpack --progress --hide-modules"
		},
		
	step 5 : npm run dev
	
```

For detailed explanation on how things work, consult the [docs for vue-loader](http://vuejs.github.io/vue-loader).
