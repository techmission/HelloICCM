<div data-role="page" id="{% block id %}{% endblock %}"> 
  <div data-role="header" data-position="fixed">
     This is the Header
  </div> 
  <div data-role="content">
    {% block content %}{% endblock %}
  </div>
  <div data-role="footer" data-position="fixed">
    <a href="#greeting" data-role="button" data-icon="home" class="{% block greeting_tab_class %}{% endblock %}">Greeting</a>
    <a href="#personal_greeting_prompt" data-role="button" data-icon="info" class="{% block personal_greeting_tab_class %}{% endblock %}">Personal Greeting</a>
  </div>  
</div>
