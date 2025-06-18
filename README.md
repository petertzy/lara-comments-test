**GitHub URL:**
[https://github.com/petertzy/lara-comments-test.git](https://github.com/petertzy/lara-comments-test.git)

**Steps to Run the Project:**

1. Open a command terminal and run the following command:

   ```bash
   composer install
   php artisan serve
   ```

2. Open another command terminal and run:

   ```bash
   npm install  
   npm run dev
   ```

3. Open a third command terminal and run:

   ```bash
   php artisan migrate:fresh
   ```

4. To load user and post data, run:

   ```bash
   php artisan db:seed --class=DatabaseSeeder
   ```

5. Open the homepage at [http://127.0.0.1:8000](http://127.0.0.1:8000)
   You will see a list of posts.

6. Click on any post.

7. Scroll to the bottom of the post and click the **Log in** button.

8. On the login page, enter the following credentials:

   **Email:** `admin@example.com`
   **Password:** `secret123`

9. After logging in, you will be able to post comments.

