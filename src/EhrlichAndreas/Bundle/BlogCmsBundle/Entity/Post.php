<?php

namespace EhrlichAndreas\Bundle\BlogCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EhrlichAndreas\Bundle\BlogCmsBundle\Entity\Post
 *
 * @ORM\Entity()
 * @ORM\Table(name="blog_post")
 *
 * @author Andreas Ehrlich
 */
class Post
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $post_id;

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
	protected $extern_id_type;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $blog_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $author_id;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $post_date;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $post_title;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $post_content;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $post_excerpt;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false)
	 */
	protected $post_status;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false)
	 */
	protected $comment_status;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false)
	 */
	protected $ping_status;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false)
	 */
	protected $post_password;

	/**
	 * @ORM\Column(type="string", length=200, nullable=false)
	 */
	protected $post_name;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $to_ping;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $pinged;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $post_modified;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $post_content_filtered;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $post_id_parent;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false)
	 */
	protected $post_type;

	/**
	 * @ORM\Column(type="string", length=100, nullable=false)
	 */
	protected $post_mime_type;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false)
	 */
	protected $comment_count;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $menu_order;

	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	protected $guid;
}
