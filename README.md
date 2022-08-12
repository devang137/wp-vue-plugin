# Vue Js & Wordpress Plugin Package 

> Wordpress Plugin with vue Package 

# Getting Started with this Setup

<ul>
  <li> Clone the repository inside of your <code>wp-content/plugins</code> directory </li>
  <li> Rename the cloned plugin directory, <code> wp-vue-plugin.php </code> </li>
  <li> Navigate to the plugin directory and run </br> <code>npm install</code> </br> <code>npm run dev</code> </li>
  <li> Activate plugin </li>
</ul> 

## Create Your Own Setup

<ul>
  <li> <code> npm install -g vue-cli </code> </li>
  <li> <code> vue init webpack-simple project-name </code> </li>
  <li> <code> npm install </code> </li>
  <li>
    Add this code to <b> Package json </b> file
    
    "scripts": {
			"dev": "webpack --watch --progress --hide-modules",
			"dev-build": "webpack -d --mode development",
			"build": "cross-env NODE_ENV=production webpack --progress --hide-modules"
		},
  </li>
  <li> <code> npm install </code> </li>
  <li> <code> npm run dev </code> </li>
  <li> It has an element <code> id='admin-app' </code> where the Vue app is getting mounted. </li>
</ul> 

For detailed explanation on how things work, consult the [docs for vue-loader](http://vuejs.github.io/vue-loader).
