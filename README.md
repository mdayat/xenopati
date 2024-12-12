##

Here's some issue that I faced throughout this process by using Laravel for the first time:

1. Unable to migrate when working on database migration feature. This issue is caused by the usage of pooled db connection string.
2. Some obstacles when creating CRUD features, such as (1) session and (2) CSRF constraints. I solve those issues by bypassing it, since there's no time to explore it further.

Things that finished:

1. Database migration.
2. Database seeding with faker.
3. Some CRUD.

Things that unfinished:

1. Some CRUD, I haven't the time to tested it yet, but Get all resources works as expected.
2. A special page to count the salary of the employee.
3. I forgot to use MySQL. It can be updated by using mysql driver instead of pgsql by updating DB_CONNECTION env variable.

Overall, my first time impression of using Laravel and PHP for the first time is a pretty much great. It can speed up, especially, the scaffolding process of a new project. It also offers some neat features that I haven't explored due to its limited time.