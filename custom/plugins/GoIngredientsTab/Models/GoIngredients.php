<?php
namespace GoIngredientsTab\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Shopware\Components\Model\ModelEntity;

/**
 * @ORM\Entity(repositoryClass="Repository")
 * @ORM\Table(name="go_ingredients")
 */
class GoIngredients extends ModelEntity
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
	private $name;

    /**
     *  @ORM\Column(name="description", type="text")
     */
	private $description;

    /**
     * @var boolean $active
     *
     *  @ORM\Column(name="active", type="boolean")
     */
	private $active;

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getDescription()
	{
		return $this->description();
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function getActive()
	{
		return $this->active();
	}

	public function setActive($active)
	{
		$this->active = $active;
	}
}
?>