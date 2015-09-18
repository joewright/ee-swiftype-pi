# ee-swiftype-pi
A [Swiftype](https://swiftype.com/) plugin for Expression Engine 2.x

##Installation
Follow [EllisLab's instructions](https://ellislab.com/expressionengine/user-guide/templates/plugins.html) for plugin installation.

##Usage

Import the Swiftype JS (don't forget the key)
```
{exp:swiftype:js_snippet st_key="my-swiftype-key"}
```

Add a search input to your template
```
{exp:swiftype:search_input}
```

Display search results
```
{exp:swiftype:search_results}
```