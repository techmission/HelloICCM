{% extends "page.tpl" %}

{% block id %}personal_greeting_prompt{% endblock %}

{% block content %}
  <fieldset>
    <div data-role="fieldcontain">
      <label for="name_input">What is your name?</label>
      <input type="text" name="name" id="name_input" />
    </div>
    <button id="personal_greeting_button" type="submit" data-theme="b" name="submit" value="submit-value">Submit</button>
  </fieldset>
{% endblock %}

{% block greeting_tab_class%}{% endblock %}

{% block personal_greeting_tab_class %}ui-btn-active ui-state-persist{% endblock %}
