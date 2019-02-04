# laravel-dashboard
Laravel based dashboard system. Uses Google Chart API to visualize JSON datas, coming from MySQL database
The system built up by using Laravel, and MatrixAdmin Bootstrap admin panel.

It is crucial to establish a high security level in order to build a system that is capable
of storing sensitive data. That is why the system built up of two separated components.
On the one hand, there is a database, where user’s account details and the analyzed
data are stored separately. The other part of the system is a dashboard, where the
visualizations and graphs are located to support data driven business decisions.
The dashboard surface can be visible only for logged in users. But if the user does not
have administrator privileges, can not see any sensitive information after logging in.
The administrator privileges can be set by a superadmin, who has access to the
database itself.
The high level of security was one of the most important factor during the
development. Not just the possibility of SQL injection and any XSS attack has been
reduced, but each login request is validated by a CSRF (Cross-Site Request Forgery)
security token. If the users have no CSRF token in the session, the system will not let
them redirect to the dashboard. The token is only existing during the session, after
closing the session, the old token can not be used to validate the user, new token needs
to be generated by the webserver.
During design and development, I paid special attention to modularity, in order to
ensure that, if necessary, the system can be further expanded with any additional
database query, graph, and subpage.
In order to use graphical visualizations, I made a comprehensive research on the
available libraries. As a result of the research, Google Chart API seemed to be the
most useful, the most customizable library. Of course, because of the modularity, any
other library can be implemented to the system. I designed the layout of the site and 
the places of the graphs, to give the opportunity to understand deeper relations
between data points. The site can help people in different business levels to find their
needs in data. If someone needs to have a quick overview, it can be seen after logging
in. But if someone needs to dive deeper in to data and create custom queries, the
implementation of a dinamic query system can be helpful.
There are plenty ways to improve the system. The primary goal was to create an
ecosystem of many different technologies that could provide a solid state for further
development. The current version can be used in many areas, where large amount of
datasets are being used, and can be further developed based on specific business
needs.
