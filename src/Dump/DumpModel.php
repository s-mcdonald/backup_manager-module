<?php namespace Defr\BackupManagerModule\Dump;

use Anomaly\Streams\Platform\Model\BackupManager\BackupManagerDumpsEntryModel;
use Defr\BackupManagerModule\Dump\Contract\DumpInterface;

class DumpModel extends BackupManagerDumpsEntryModel implements DumpInterface
{

    /**
     * The content.
     *
     * @var string
     */
    protected $content;

    /**
     * Gets the identifier.
     *
     * @return int The identifier.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the title.
     *
     * @return string The title.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title.
     *
     * @return string The title.
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the path.
     *
     * @return string The path.
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets the path.
     *
     * @return string The path.
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Gets the size.
     *
     * @return string The size.
     */
    public function getSize()
    {
        return app('files')->size($this->getPath());
    }

    /**
     * Gets the content.
     *
     * @return string The content.
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content.
     *
     * @param  string  $content The content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
