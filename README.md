# Опис принципів програмування в коді

У цьому проекті реалізовано кілька важливих принципів програмування, зокрема SOLID, DRY, KISS та інші. Далі наведено опис кожного з цих принципів і їх реалізація в коді.

## 1. DRY (Don’t Repeat Yourself)

Принцип DRY полягає в уникненні дублювання коду. У нашому проекті код для відображення інформації про тварин, працівників, вольєри та корм винесений в окремі методи класів. Це дозволяє нам зберігати код чистим і легко розширюваним.

- **Файл**: [animals.php](./animals.php), [employees.php](./employees.php), [enclosures.php](./enclosures.php), [food.php](./food.php)
- **Опис**: У всіх цих файлах ми використовуємо метод `getInfo()`, який відповідає за виведення інформації про кожен об'єкт (тварини, працівники, вольєри та корм). Це дозволяє зберігати код без дублювання, оскільки логіка виведення однорідна для всіх об'єктів.

## 2. KISS (Keep It Simple, Stupid)

Принцип KISS передбачає, що код має бути простим і зрозумілим. Ми використовуємо базові класи для кожної категорії (тварини, працівники, вольєри, корм), що забезпечує зручність і простоту для розуміння і подальшої підтримки коду.

- **Файл**: [animals.php](./animals.php), [employees.php](./employees.php), [enclosures.php](./enclosures.php), [food.php](./food.php)
- **Опис**: Кожен клас описує лише одну сутність (наприклад, клас `Animal` — тільки для тварин), а також містить лише необхідні властивості та методи. Це дозволяє легко підтримувати та розширювати програму.

## 3. SOLID принципи

### 3.1. Single Responsibility Principle (SRP)

Кожен клас відповідає тільки за одну частину функціональності. Наприклад, клас `Animal` відповідає за збереження і виведення інформації про тварин, клас `Employee` — за інформацію про працівників, і так далі.

- **Файл**: [animals.php](./animals.php), [employees.php](./employees.php), [enclosures.php](./enclosures.php), [food.php](./food.php)
- **Опис**: Кожен клас має одну відповідальність — описує один тип сутності, будь то тварина, працівник, вольєр або корм.

### 3.2. Open/Closed Principle (OCP)

Код відкритий для розширення, але закритий для змін. Якщо потрібно додати нову категорію (наприклад, новий тип тварини чи корму), можна створити новий клас без змін в існуючих частинах коду.

- **Файл**: [animals.php](./animals.php), [employees.php](./employees.php), [enclosures.php](./enclosures.php), [food.php](./food.php)
- **Опис**: Наприклад, можна додати новий клас, який буде розширювати функціональність без зміни існуючих класів.

### 3.3. Liskov Substitution Principle (LSP)

У проекті не використовуться наслідування, але принцип LSP працює, якщо уявити, що ми б розширили класи для створення підкласів. Це дозволяє замінювати один клас на інший без порушення логіки роботи програми.

- **Файл**: Не застосовуються конкретні підкласи, але цей принцип є можливим для майбутнього розширення.

### 3.4. Interface Segregation Principle (ISP)

У кожному класі використовується лише необхідні методи для роботи з об'єктами (наприклад, `getInfo()` для кожного класу). Це дозволяє уникнути занадто великих інтерфейсів і забезпечує гнучкість.

- **Файл**: [animals.php](./animals.php), [employees.php](./employees.php), [enclosures.php](./enclosures.php), [food.php](./food.php)
- **Опис**: Кожен клас має лише необхідні методи, зокрема `getInfo()`, що забезпечує простоту і відсутність перевантаження інтерфейсу.

### 3.5. Dependency Inversion Principle (DIP)

У проекті немає жорстких залежностей між класами. Кожен клас самостійно керує своєю логікою, не залежачи від реалізацій інших класів.

- **Файл**: [index.php](./index.php) (і інші файли, де використовуються класи)
- **Опис**: Кожен клас самостійно управляє своїми даними та не залежить від конкретних реалізацій інших класів.

## 4. YAGNI (You Aren’t Gonna Need It)

Я дотримуюсь принципу YAGNI і додаю тільки ті функції, які необхідні для виконання завдання. Наприклад, не додається зайвих методів чи властивостей до класів, що не відповідають на конкретні вимоги проекту.

- **Файл**: [index.php](./index.php)
- **Опис**: Функціональність в проекті реалізована мінімально, відповідно до поточних вимог. Ми не додаємо зайвих функцій або класів.

## 5. Composition Over Inheritance

У проекті я використовую композицію замість наслідування. Кожен клас самостійно визначає свої властивості і методи, не наслідуючи їх від інших класів.

- **Файл**: [animals.php](./animals.php), [employees.php](./employees.php), [enclosures.php](./enclosures.php), [food.php](./food.php)
- **Опис**: Створюються окремі класи для кожного типу об'єкта без використання наслідування, що забезпечує гнучкість.

## 6. Program to Interfaces, not Implementations

Код орієнтований на використання класів як інтерфейсів для взаємодії з об'єктами, а не на конкретні реалізації. Це дозволяє легко замінювати одні реалізації на інші.

- **Файл**: [index.php](./index.php)
- **Опис**: Клас може бути замінений іншим без порушення роботи програми, оскільки кожен клас має власну інтерфейсну логіку.

## 7. Fail Fast

У разі помилки або невідповідності вимогам програма швидко припиняє виконання. Це дозволяє швидко виявляти помилки на ранніх етапах.

- **Файл**: [index.php](./index.php)
- **Опис**: Якщо відсутній файл або некоректні дані, код припиняє виконання і виводить відповідне повідомлення про помилку.

---

Це лише основні принципи, які застосовуються в моєму коді. Вони допомагають зробити програму більш зрозумілою, гнучкою і підтримуваною.
