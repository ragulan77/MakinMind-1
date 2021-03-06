Step 2a: Setup Doctrine ORM mapping
===================================
The ORM implementation does not provide a concrete Comment class for your use,
you must create one::

``` php
<?php
// src/MyProject/MyBundle/Entity/Comment.php

namespace MyProject\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="MyProject\MyBundle\Entity\Thread")
     */
    protected $thread;

    /**
     * @return Thread
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * @param Thread $thread
     * @return null
     */
    public function setThread(Thread $thread)
    {
        $this->thread = $thread;
    }
}
```

And the Thread:

``` php
<?php
// src/MyProject/MyBundle/Entity/Thread.php

namespace MyProject\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Thread extends BaseThread
{
    /**
     * @var string $id
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;
}
```

## Configure your application

``` yaml
# app/config/config.yml

fos_comment:
    db_driver: orm
    class:
        model:
            comment: MyProject\MyBundle\Entity\Comment
            thread: MyProject\MyBundle\Entity\Thread
```

Or if you prefer XML:

``` xml
# app/config/config.xml

<fos_comment:config db-driver="orm">
    <fos_comment:class>
        <fos_comment:model
            comment="MyProject\MyBundle\Entity\Comment"
            thread="MyProject\MyBundle\Entity\Thread"
        />
    </fos_comment:class>
</fos_comment:config>
```
### Back to the main step
[Step 2: Create your Comment and Thread classes](2-create_your_comment_and_thread_classes.md).
