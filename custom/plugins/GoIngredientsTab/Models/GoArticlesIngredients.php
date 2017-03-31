<?php 
namespace GoIngredientsTab\Models;

use Doctrine\ORM\Mapping as ORM;
use Shopware\Components\Model\ModelEntity;

/**
 * @ORM\Entity(repositoryClass="Repository")
 * @ORM\Table(name="go_articles_ingredients")
 */

class GoArticlesIngredients extends ModelEntity
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;
	
	/**
	 * @ORM\Column(name="articleID", type="integer", nullable=false)
	 */
	private $articleID;
	
	/**
	 * @ORM\Column(name="ingredientsID", type="integer", nullable=false)
	 */
	private $ingredientsID;
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getArticleID()
	{
		return $this->articleID;
	}
	
	public function setArticleID($articleID)
	{
		$this->articleID = $articleID;
	}
	
	public function getIngredientsID()
	{
		return $this->ingredientsID();
	}
	
	public function setIngredientsID($ingredientsID)
	{
		$this->ingredientsID = $ingredientsID;
	}
}
?>