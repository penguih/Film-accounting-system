# Film-accounting-system
## Індивідуальне завдання та результати його виконання
Індивідуальне завдання та результати його виконання
Слід розробити веб-застосунок «Система обліку», призначений для збереження і організації доступу до відомостей про сутність Фільми. Сутність має один числовий параметр і два текстових, один з яких унікальний і використовується як ідентифікатор сутності.
### Система повинна реалізовувати:
1. CRUD-операції для об’єктів заданої сутності:
  - Create – додавання об’єкту до сховища
  - Read – отримання об’єкту зі сховища
  - Update – модифікація об’єкту у сховищі
  - Delete – видалення об’єкту зі сховища
2. Чотири додаткові сценарії:
  - Видати всі об’єкти сутності, відсортовані за їх ідентифікатором.
  - Видати задану кількість об’єктів сутності, відсортованих за заданим параметром.
  - Видати список об’єкту сутності, значення числового параметру в яких більше заданого.
  - Визначити кількість об’єктів сутності, які задовольняє двом критеріям — числовий параметр більший/менший за задане значення, а текстовий дорівнює заданому значенню. 
### Технічні вимоги:
1. Мова реалізації і використані бібліотеки/фреймворки – будь-які. 
Обрано – PHP Data Object (PHP PDO).
2. Застосунок підтримує веб-інтерфейс. Особливих вимог до зовнішнього вигляду не висувається.
3. Для збереження даних веб-застосунок використовує будь-яку мережну реляційну базу даних. Обрано – MySQL.
### Опис системи обліку:
Система – Список фільмів за рейтингом.
Сутність – Фільм:
-	Текстовий параметр (ідентифікатор) – Назва
-	Текстовий параметр (категорія) – Жанр
-	Числовий параметр (параметр обліку) – Рейтинг (від 0 до 10)
### Функціонал системи:
1.	Видати список всіх Фільмів, відсортованих за Назвою.
2.	Видати задану кількість Фільмів, відсортованих за Жанрами.
3.	Видати список Фільмів, Рейтинг у яких більше заданого числа.
4.	Визначити кількість Фільмів в заданому Жанрі, у яких рейтинг більше заданої та виведення цього списку. 
## Структура проекту:
![1](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/1.png)
#### Для розміщення застосунку на локальному сервері використовувалось програмне забезпечення MAMP:
![2](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/2.png)
#### Підключення до локальної бази даних:
![3](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/3.png)
#### Підключення до бази даних в різних розділах:
![4](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/4.png)
#### Структура бази даних:
![5](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/5.png)
#### Користувачі з правами доступу:
![6](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/6.png)
#### Огляд БД, виведення усіх строк:
![7](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/7.png)
#### Структура БД:
![8](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/8.png)
#### Інформація по БД:
![9](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/9.png)
#### Параметри таблиці:
![10](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/10.png)
## Демонстрація роботи CRUD операцій:
#### 1. Додавання об’єкту до сховища та отримання об’єкту зі сховища (Create  та Read), відсортування за замовчанням в порядку додавання нових фільмів.
![11](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/11.png)
#### Результат додавання нового Фільму:
![12](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/12.png)
#### 2. Update – модифікація об’єкту у сховищі.
![13](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/13.png)
#### Вікно зміни назви обраного Фільму:
![14](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/14.png)
#### Результат зміни назви:
![15](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/15.png)
#### Вікно зміни рейтингу обраного Фільму:
![16](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/16.png)
#### Результат зміни рейтингу:
![17](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/17.png)
#### 3. Delete – видалення об’єкту зі сховища.
![18](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/18.png)
#### Результат видалення:
![19](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/19.png)
### Хід роботи системи:
#### 1. Список всіх Фільмів, відсортованих за Назвою по алфавіту.
![20](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/20.png)
#### 2. Видати задану кількість Фільмів, відсортованих за Жанрами.
![21](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/21.png)
#### 3. Видати список Фільмів, Рейтинг у яких більше заданого числа.
#### Фільми з рейтингом більше 8.6:
![22](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/22.png)
#### Фільми з рейтингом більше 9:
![23](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/23.png)
#### 4. Визначити кількість Фільмів в заданому Жанрі, у яких рейтинг більше заданої та виведення цього списку.
#### Варіант сортування 1:
![24](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/24.png)
#### Варіант сортування 2:
![25](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/25.png)
#### Варіант сортування 3:
![26](https://raw.githubusercontent.com/penguih/Film-accounting-system/main/img_info/26.png)














