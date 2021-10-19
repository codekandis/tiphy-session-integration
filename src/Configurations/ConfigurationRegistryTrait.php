<?php declare( strict_types = 1 );
namespace CodeKandis\TiphySessionIntegration\Configurations;

use CodeKandis\Session\Configurations\SessionsConfigurationInterface;

/**
 * Represents the trait to integrate a sessions configuration into a configuration registry.
 * @package codekandis/tiphy-sessions-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
trait ConfigurationRegistryTrait
{
	/**
	 * Stores the sessions configuration.
	 * @var ?SessionsConfigurationInterface
	 */
	private ?SessionsConfigurationInterface $sessionsConfiguration = null;

	/**
	 * {@inheritDoc}
	 */
	public function getSessionsConfiguration(): ?SessionsConfigurationInterface
	{
		return $this->sessionsConfiguration;
	}
}
