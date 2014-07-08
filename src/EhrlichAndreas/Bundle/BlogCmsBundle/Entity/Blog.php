<?php

namespace EhrlichAndreas\Bundle\BlogCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EhrlichAndreas\Bundle\BlogCmsBundle\Entity\Blog
 *
 * @ORM\Entity()
 * @ORM\Table(name="blog_blog")
 *
 * @author Andreas Ehrlich
 */
class Blog
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $blog_id;

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
	protected $author_id;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $blog_title;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $blog_content;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $blog_excerpt;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false, options={"default": ""})
	 */
	protected $blog_status;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false, options={"default": ""})
	 */
	protected $comment_status;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false, options={"default": ""})
	 */
	protected $ping_status;

	/**
	 * @ORM\Column(type="string", length=20, nullable=false, options={"default": ""})
	 */
	protected $blog_password;

	/**
	 * @ORM\Column(type="string", length=200, nullable=false, options={"default": ""})
	 */
	protected $blog_name;

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
	protected $blog_modified;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	protected $blog_content_filtered;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $menu_order;

	/**
	 * @ORM\Column(type="string", length=255, nullable=false, options={"default": ""})
	 */
	protected $guid;
}
