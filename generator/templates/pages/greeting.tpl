{% extends "page.tpl" %}

{% block id %}greeting{% endblock %}

{% block content %}
  <h1>Hello</h1>
  <img src="http://iccm.org/pub/iccm_small_logo.jpg"/>
{% endblock %}

{% block greeting_tab_class%}ui-btn-active ui-state-persist{% endblock %}

{% block personal_greeting_tab_class %}{% endblock %}
