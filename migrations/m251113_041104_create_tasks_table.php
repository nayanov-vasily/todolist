<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks}}`.
 */
class m251113_041104_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'status' => "ENUM('new', 'in_progress', 'completed') NOT NULL DEFAULT 'new'",
        ]);

        $this->batchInsert('{{%tasks}}', ['title', 'description', 'status'], [
            ['Задача 1', 'Выполнить тестовое задание', 'completed'],
            ['Задача 2', 'Выложить код на гитхаб', 'completed'],
            ['Задача 3', 'Сходить в магазин', 'new'],
            ['Задача 4', 'Попить чайку', 'in_progress'],
            ['Задача 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper, leo eu ornare tempus, nunc eros pharetra purus, vitae tincidunt tortor tellus nec ipsum.', 'new'],
            ['Задача 6', 'Etiam iaculis pellentesque turpis, a ornare felis gravida at. Curabitur elementum ullamcorper dapibus. Morbi nec bibendum dui.', 'new'],
            ['Задача 7', 'Sed varius mi pretium volutpat ultricies. Sed vitae auctor magna.', 'new'],
            ['Задача 8', 'Mauris congue dui tellus, in interdum massa sagittis gravida.', 'new'],
            ['Задача 9', 'Vivamus eu efficitur ligula.', 'new'],
            ['Задача 10', 'Etiam sed vehicula lectus, id mollis justo.', 'new'],
            ['Задача 11', 'Etiam accumsan iaculis facilisis. Aliquam blandit laoreet ultrices.', 'new'],
            ['Задача 12', 'Sed feugiat dolor ipsum, et commodo justo aliquam a. Nam aliquam purus nec risus porta sodales. ', 'new'],
            ['Задача 13', 'Maecenas fringilla, libero sed placerat lacinia, felis metus lobortis magna, nec dictum enim odio nec sapien.', 'new'],
            ['Задача 14', 'Duis quam turpis, pharetra et justo et, pharetra cursus ante. Sed id sem enim.', 'new'],
            ['Задача 15', 'Quisque mattis lorem ac felis ultrices congue. Vivamus sit amet lacinia ipsum. Proin fermentum lorem eu scelerisque accumsan.', 'new'],
            ['Задача 16', 'Nam a egestas enim, id rhoncus tortor. Ut ex ipsum, imperdiet eu purus in, mollis mollis magna.', 'new'],
            ['Задача 17', 'Donec fringilla justo ac tellus placerat, vehicula consequat quam euismod. Integer mattis elementum diam, quis tristique ipsum fringilla et.', 'new'],
            ['Задача 18', 'Praesent erat ex, blandit quis nisi feugiat, suscipit imperdiet nulla. Nullam sed massa in libero auctor ultricies.', 'new'],
            ['Задача 19', 'Nunc massa arcu, elementum in porttitor id, eleifend quis erat.', 'new'],
            ['Задача 20', 'Sed a sem nisl. Suspendisse condimentum eget tortor eget dictum.', 'new'],
            ['Задача 21', 'Nam imperdiet dignissim congue. Pellentesque diam nibh, aliquet vehicula facilisis vel, eleifend id tortor.', 'new'],
            ['Задача 22', 'Phasellus a sodales urna. Donec feugiat vel odio non auctor.', 'new'],
            ['Задача 23', 'Suspendisse elementum urna sed ligula venenatis ullamcorper.', 'new'],
            ['Задача 24', 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. ', 'new'],
            ['Задача 25', 'Aliquam rhoncus lacinia dui, ut lobortis mauris rutrum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'new'],
            ['Задача 26', 'Donec nisl sem, condimentum id massa non, eleifend rutrum erat.', 'new'],
            ['Задача 27', 'Etiam sed euismod neque, non venenatis neque. Integer id fermentum quam, eget facilisis risus.', 'new'],
            ['Задача 28', 'Sed euismod ante a mi tristique, at blandit lectus vehicula. Quisque dictum aliquet mi eget iaculis.', 'new'],
            ['Задача 29', 'In tellus est, fringilla sodales dui et, feugiat lacinia neque. Nullam imperdiet massa leo, quis aliquet ex varius vel.', 'new'],
            ['Задача 30', 'Ut at condimentum lectus, a vulputate justo. Donec non aliquam eros.', 'new'],
            ['Задача 31', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam aliquet ultricies nisi ac ullamcorper.', 'new'],
            ['Задача 32', 'Donec ut tortor purus. Cras non quam et massa blandit laoreet ac vitae augue. Nullam ac rhoncus augue.', 'new'],
            ['Задача 33', 'Quisque consectetur consequat sapien non tempor. Nulla dictum non massa eu eleifend.', 'new'],
            ['Задача 34', 'Aliquam condimentum bibendum ligula ac condimentum. Nulla id dictum ex. In eu elit dolor. Integer viverra libero facilisis, finibus erat in, sollicitudin erat.', 'new'],
            ['Задача 35', 'uspendisse eu dolor tempor, vehicula mauris eget, pellentesque ipsum. Morbi ligula tellus, consequat in congue a, tempor id orci.', 'new'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tasks}}');
    }
}
