<?php

namespace EhrlichAndreas\Bundle\BlogCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EhrlichAndreas\Bundle\BlogCmsBundle\Entity\Comment
 *
 * @ORM\Entity()
 * @ORM\Table(name="blog_comment")
 *
 * @author Andreas Ehrlich
 */
final class Comment
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $comment_id;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $published;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $updated;

	/**
	 * @ORM\Column(type="integer", nullable=false, options={"default": "0"})
	 */
	protected $enabled;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $extern_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $blog_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $author_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $post_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $comment_id_parent;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $comment_date;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $comment_content;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $comment_content_filtered;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false)
	 */
	protected $comment_type;

	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	protected $guid;
}
